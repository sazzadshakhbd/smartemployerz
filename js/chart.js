// Gender Chart
document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("genderChart").getContext("2d");

  new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Male", "Female"],
      datasets: [
        {
          data: [55, 45],
          backgroundColor: [
            "#00A991", // Darker teal for Male
            "#7ED4C6", // Lighter teal for Female
          ],
          borderWidth: 0,
          cutout: "70%", // Makes the donut hole
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: false, // Hide default legend
        },
        tooltip: {
          callbacks: {
            label: function (context) {
              return `${context.label}: ${context.raw}%`;
            },
          },
        },
      },
    },
  });
});

// Age Chart
document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("ageChart").getContext("2d");

  new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["18-24", "25-30", "30+"],
      datasets: [
        {
          data: [12, 42, 43],
          backgroundColor: [
            "#B5E4DC", // Lightest teal for 18-24
            "#00A991", // Dark teal for 25-30
            "#7ED4C6", // Medium teal for 30+
          ],
          borderWidth: 0,
          cutout: "70%", // Makes the donut hole
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: false, // Hide default legend
        },
        tooltip: {
          callbacks: {
            label: function (context) {
              return `${context.label}: ${context.raw}%`;
            },
          },
        },
      },
    },
  });
});

// Location Chart
document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("locationChart").getContext("2d");

  // Create bar gradient
  function createBarGradient(ctx, height) {
    const gradient = ctx.createLinearGradient(0, 0, 0, height);
    gradient.addColorStop(0, "#2DAFA3"); // Dark teal
    gradient.addColorStop(1, "#2DAFA3"); // Light teal
    return gradient;
  }

  // Create base background gradient
  function createBaseGradient(ctx, height) {
    const gradient = ctx.createLinearGradient(0, 0, 0, height);
    gradient.addColorStop(0, "#E4F5F3"); // Very light teal
    gradient.addColorStop(1, "#E4F5F3"); // Almost white
    return gradient;
  }

  // Get canvas height
  const chartHeight = 100; // Fixed height for gradient
  const barGradient = createBarGradient(ctx, chartHeight);
  const baseGradient = createBaseGradient(ctx, chartHeight);

  // Custom plugin for rounded bars and base background
  const roundedBarPlugin = {
    id: "roundedBar",
    beforeDatasetsDraw(chart) {
      const { ctx, chartArea, scales } = chart;

      // Check if scales and chartArea are defined
      if (!chartArea || !scales) return;

      const { left, right, top, bottom } = chartArea;
      const yScale = scales.y;
      const xScale = scales.x;

      // Draw base/background bars only if scales exist
      if (xScale && yScale) {
        chart.data.datasets[0].data.forEach((value, index) => {
          const barWidth = 16;
          const x = xScale.getPixelForValue(index) - barWidth / 2; // Get bar center
          const y = yScale.getPixelForValue(0); // Base line (zero point)
          const height = bottom - top; // Full height of the chart

          // Draw background base bar
          ctx.fillStyle = baseGradient;
          ctx.fillRect(x, top, barWidth, height);
        });
      }
    },
    afterDatasetDraw(chart, args) {
      const { ctx } = chart;
      const meta = args.meta;

      // Ensure meta and data are defined
      if (!meta || !meta.data) return;

      meta.data.forEach((bar) => {
        if (!bar || !bar.tooltipPosition) return; // Ensure bar exists
        const { x, y, width, height } = bar.tooltipPosition();

        // Draw rounded bar with gradient
        const radius = 1000;
        ctx.save();
        ctx.beginPath();
        ctx.moveTo(x - width / 2, y);
        ctx.arcTo(x + width / 2, y, x + width / 2, y + height, radius);
        ctx.arcTo(x + width / 2, y + height, x - width / 2, y + height, radius);
        ctx.arcTo(x - width / 2, y + height, x - width / 2, y, radius);
        ctx.arcTo(x - width / 2, y, x + width / 2, y, radius);
        ctx.closePath();
        ctx.clip();
        ctx.fillStyle = barGradient;
        ctx.fillRect(x - width / 2, y, width, height);
        ctx.restore();
      });
    },
  };

  // Register the custom plugin
  Chart.register(roundedBarPlugin);

  // Create the chart
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["DHK", "CTG", "BSL", "KHU", "RAJ", "RAN", "MYM", "SYL"],
      datasets: [
        {
          data: [350, 150, 280, 220, 120, 160, 270, 210],
          backgroundColor: barGradient,
          barThickness: 16,
          borderRadius: 16,
        },
      ],
    },
    options: {
      indexAxis: "x",
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          max: 1000,
          grid: {
            color: "#E4F5F3",
          },
          ticks: {
            stepSize: 200,
            font: {
              size: 12,
            },
            color: "#666",
          },
          title: {
            display: true,
            text: "Applicant",
            color: "#666",
            font: {
              size: 12,
            },
          },
        },
        x: {
          grid: {
            display: false,
          },
          ticks: {
            font: {
              size: 12,
            },
            color: "#666",
          },
        },
      },
      plugins: {
        legend: {
          display: false,
        },
        tooltip: {
          backgroundColor: "rgba(0, 0, 0, 0.8)",
          padding: 12,
          titleFont: {
            size: 14,
          },
          bodyFont: {
            size: 14,
          },
        },
      },
    },
  });
});

// Digree Chart
document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("digree").getContext("2d");

  // Create bar gradient
  function createBarGradient(ctx, height) {
    const gradient = ctx.createLinearGradient(0, 0, 0, height);
    gradient.addColorStop(0, "#2DAFA3"); // Dark teal
    gradient.addColorStop(1, "#2DAFA3"); // Light teal
    return gradient;
  }

  // Create base background gradient
  function createBaseGradient(ctx, height) {
    const gradient = ctx.createLinearGradient(0, 0, 0, height);
    gradient.addColorStop(0, "#E4F5F3"); // Very light teal
    gradient.addColorStop(1, "#E4F5F3"); // Almost white
    return gradient;
  }

  // Get canvas height
  const chartHeight = 100; // Fixed height for gradient
  const barGradient = createBarGradient(ctx, chartHeight);
  const baseGradient = createBaseGradient(ctx, chartHeight);

  // Custom plugin for rounded bars and base background
  const roundedBarPlugin = {
    id: "roundedBar",
    beforeDatasetsDraw(chart) {
      const { ctx, chartArea, scales } = chart;

      // Check if scales and chartArea are defined
      if (!chartArea || !scales) return;

      const { left, right, top, bottom } = chartArea;
      const yScale = scales.y;
      const xScale = scales.x;

      // Draw base/background bars only if scales exist
      if (xScale && yScale) {
        chart.data.datasets[0].data.forEach((value, index) => {
          const barWidth = 16;
          const x = xScale.getPixelForValue(index) - barWidth / 2; // Get bar center
          const y = yScale.getPixelForValue(0); // Base line (zero point)
          const height = bottom - top; // Full height of the chart

          // Draw background base bar
          ctx.fillStyle = baseGradient;
          ctx.fillRect(x, top, barWidth, height);
        });
      }
    },
    afterDatasetDraw(chart, args) {
      const { ctx } = chart;
      const meta = args.meta;

      // Ensure meta and data are defined
      if (!meta || !meta.data) return;

      meta.data.forEach((bar) => {
        if (!bar || !bar.tooltipPosition) return; // Ensure bar exists
        const { x, y, width, height } = bar.tooltipPosition();

        // Draw rounded bar with gradient
        const radius = 1000;
        ctx.save();
        ctx.beginPath();
        ctx.moveTo(x - width / 2, y);
        ctx.arcTo(x + width / 2, y, x + width / 2, y + height, radius);
        ctx.arcTo(x + width / 2, y + height, x - width / 2, y + height, radius);
        ctx.arcTo(x - width / 2, y + height, x - width / 2, y, radius);
        ctx.arcTo(x - width / 2, y, x + width / 2, y, radius);
        ctx.closePath();
        ctx.clip();
        ctx.fillStyle = barGradient;
        ctx.fillRect(x - width / 2, y, width, height);
        ctx.restore();
      });
    },
  };

  // Register the custom plugin
  Chart.register(roundedBarPlugin);

  // Create the chart
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Diploma", "Bachelor", "Masters", "Doc."],
      datasets: [
        {
          data: [350, 150, 280, 220, 120, 160, 270, 210],
          backgroundColor: barGradient,
          barThickness: 16,
          borderRadius: 16,
        },
      ],
    },
    options: {
      indexAxis: "x",
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          max: 1000,
          grid: {
            color: "#E4F5F3",
          },
          ticks: {
            stepSize: 200,
            font: {
              size: 12,
            },
            color: "#666",
          },
          title: {
            display: true,
            text: "Applicant",
            color: "#666",
            font: {
              size: 12,
            },
          },
        },
        x: {
          grid: {
            display: false,
          },
          ticks: {
            font: {
              size: 12,
            },
            color: "#666",
          },
        },
      },
      plugins: {
        legend: {
          display: false,
        },
        tooltip: {
          backgroundColor: "rgba(0, 0, 0, 0.8)",
          padding: 12,
          titleFont: {
            size: 14,
          },
          bodyFont: {
            size: 14,
          },
        },
      },
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("horizontalBarChart").getContext("2d");

  // Function to create a horizontal gradient
  function createGradient(ctx, width) {
    const gradient = ctx.createLinearGradient(0, 0, width, 0); // Horizontal gradient
    gradient.addColorStop(0, "#2DAFA3"); // Dark teal
    gradient.addColorStop(1, "#A7E6E3"); // Light teal
    return gradient;
  }

  // Canvas width for gradient
  const chartWidth = 600; // Adjust based on chart size
  const barGradient = createGradient(ctx, chartWidth);

  // Data for the chart
  const data = {
    labels: [
      "National University",
      "North South University",
      "Bangladesh University (BUBT)",
      "Jahangirnagar University",
      "Khulna University (KUET)",
    ],
    datasets: [
      {
        label: "Applicants",
        data: [120, 40, 29, 43, 22],
        backgroundColor: barGradient, // Apply gradient here
        barThickness: 18,
      },
    ],
  };

  // Chart options
  const options = {
    indexAxis: "y", // Horizontal bars
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false, // Hide legend
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            return `${context.dataset.label}: ${context.raw}`;
          },
        },
      },
    },
    scales: {
      x: {
        beginAtZero: true,
        grid: {
          drawOnChartArea: false, // Remove gridlines
        },
        ticks: {
          font: {
            size: 12,
          },
          color: "#666",
        },
        title: {
          display: true,
          text: "Number of Applicants",
          color: "#666",
          font: {
            size: 12,
          },
        },
      },
      y: {
        grid: {
          display: false, // Remove gridlines
        },
        ticks: {
          font: {
            size: 12,
          },
          color: "#666",
        },
      },
    },
  };

  // Initialize Chart.js
  new Chart(ctx, {
    type: "bar",
    data: data,
    options: options,
  });
});
